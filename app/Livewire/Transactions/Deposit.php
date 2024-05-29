<?php

namespace App\Livewire\Transactions;

use App\Services\TransactionsServices;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Deposit extends Component
{
    use WithPagination;
    
     public $date;
     public $amount;
    protected $service;
    public function boot(TransactionsServices $service) {
        $this->service = $service;
        $this->date = date('Y-m-d');
    }

    public function createDeposit() {
        $data = $this->validate([
            'date' => 'required|date',
            'amount' => 'required|integer',
        ]);
        try {
            if($this->service->newDeposit(...$data)) {
                session()->flash('success','Deposit was successfully created');
                $this->closeModal();
            }else {
                session()->flash('error','Something went wrong');    
                $this->closeModal();
            }
            $this->closeModal();
            $this->reset('amount');
        }catch (Exception $e) {
            DB::rollBack();
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
        $transactions = $this->service->depositList();
        return view('livewire.transactions.deposit',compact('transactions'));
    }
}
