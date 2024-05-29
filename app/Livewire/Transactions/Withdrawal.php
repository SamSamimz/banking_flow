<?php

namespace App\Livewire\Transactions;

use App\Services\TransactionsServices;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class Withdrawal extends Component
{
    use WithPagination;
    public $date;
    public $amount;
    public $user;
   protected $service;
   public function boot(TransactionsServices $service) {
       $this->service = $service;
       $this->user = auth()->user();
       $this->date = date('Y-m-d');
   }

   public function createWithdraw() {
       $data = $this->validate([
           'date' => 'required|date',
           'amount' => 'required|integer|lte:'.$this->user->balance,
       ]);
    try {
        if($this->service->newWithdraw(...$data)) {
            session()->flash('success','Withdraw was successfully created');
            $this->closeModal();
        }else {
            session()->flash('error','Something went wrong');    
            $this->closeModal();
        }
        $this->closeModal();
        $this->reset('amount');
    }catch (Exception $e) {
        session()->flash('error', $e->getMessage());
        $this->closeModal();
    }
   }

    public function closeModal() {
        $this->reset('amount');
        $this->dispatch('closeModal');
    }


    public function render()
    {
        $transactions = $this->service->withdrawalList();
        return view('livewire.transactions.withdrawal',compact('transactions'));
    }
}
