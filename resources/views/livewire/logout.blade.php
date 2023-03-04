<form wire:submit.prevent="logout">
    @csrf
    <button class="logout">
        خروج از حساب
    </button>
</form>
