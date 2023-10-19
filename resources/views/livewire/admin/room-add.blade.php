<div>
    <div class="bg-white p-10 rounded-xl">
        <div>
            {{ $this->form }}
        </div>
        <div class="mt-5 flex space-x-2 items-center">
            <x-button label="Submit" class="font-semibold" positive right-icon="save" wire:click="submitRecord"
                spinner="submitRecord" />
            <x-button label="Cancel" class="font-semibold" dark icon="x" href="{{ route('admin.room') }}" />
        </div>
    </div>
</div>
