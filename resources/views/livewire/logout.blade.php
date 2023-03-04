<form wire:submit.prevent="logout">
    @csrf
    <button class="logout">
        <svg width="18" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="power-off" class="svg-inline--fa fa-power-off fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M381.4 51.56c-11.38-6.938-26.12-3.406-33 7.875c-6.938 11.31-3.406 26.09 7.875 33C413.7 127.7 448 188.8 448 256c0 105.9-86.13 192-192 192s-192-86.13-192-192c0-67.53 34.56-128.8 92.47-164C167.8 85.09 171.4 70.34 164.5 59C157.6 47.69 142.9 44.06 131.5 50.97C59.19 94.91 16 171.5 16 256c0 132.3 107.7 240 240 240s240-107.7 240-240C496 172 453.2 95.59 381.4 51.56zM255.1 288C269.2 288 280 277.3 280 264v-240c0-13.25-10.75-24-23.1-24S232 10.75 232 24v240C232 277.3 242.7 288 255.1 288z" fill="currentColor"/></svg>
    </button>
</form>
