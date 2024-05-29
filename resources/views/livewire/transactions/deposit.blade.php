<div>
    <div class="card anime-box">
        <div class="p-3 d-flex align-items-center justify-content-between">
            <h4 class="card-title">{{ __('Deposits List') }}</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#depositModal">Create Deposit</button>
        </div>
        @include('livewire.partials.alerts')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Date') }}</th>
                            <th scope="col">{{ __('Amount') }}</th>
                            <th scope="col">{{ __('Fee') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->date }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>{{ $transaction->fee }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="4">{{ __('No tranaction to show') }}</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            {{ $transactions->links() }}
        </div>
    </div>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="depositModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="depositModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="depositModalLabel">Create Deposit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent='createDeposit()'>
        <div class="modal-body">
            <div class="form-group mb-2">
                <label class="form-label" for="date">{{ __('Date') }}</label>
                <input type="date" step="any" id="date" class="form-control" wire:model="date"/>
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="amount">{{ __('Amount') }}</label>
                <input type="number" step="any" id="amount" class="form-control" wire:model="amount" />
                @error('amount')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary my-3 d-block">{{ __('Submit') }}</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  

  <script>
    document.addEventListener('DOMContentLoaded', function(){
        Livewire.on('closeModal', function(){
            $('#depositModal').modal('hide');
        });
    });
  </script>

</div>