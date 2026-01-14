<section class="sender w-full flex flex-col gap-6">

    <div {{ $attributes->merge(['class' => 'flex flex-col gap-3']) }}>
        <label for="item_name" class="text-[13px] leading-4 font-medium text-text-muted  ">
            Item Name
        </label>

        <input class="bg-white border py-4 rounded-lg px-3  border-light-card" type='text' placeholder='Item Name'
            name="item_name" id="item_name">
    </div>

    <div class="quantity-info flex gap-3 items-center w-full">
        <div class="flex flex-col gap-3 w-[25%]">
            <label for="quantity" class="text-[13px] leading-4 font-medium text-text-muted  ">
                Qty.
            </label>
            <input class="bg-white border py-4 rounded-lg px-3  border-light-card" type='number' placeholder='2'
                name="quantity" id="quantity">
        </div>
        <div class="flex flex-col gap-3 w-[25%]">
            <label for="price" class="text-[13px] leading-4 font-medium text-text-muted  ">
                Price
            </label>
            <input class="bg-white border py-4 rounded-lg px-3  border-light-card" type='number' placeholder='£1500.00'
                name="price" id="price">
        </div>

        <div class="flex flex-col gap-3 w-[25%]">
            <label for="total" class="text-[13px] leading-4 font-medium text-text-muted  ">
                Total
            </label>
            <input class="bg-white border-none outline-none py-4 rounded-lg px-3  border-light-card" type='text'
                placeholder='£1500.00' name="total" id="total">
        </div>

        <div class="flex w-[25%] ">
            <button>
                <img class="w-6 mt-4.25" src="{{ Vite::asset('resources/images/icon-delete.svg') }}" alt="Delete icon">
            </button>
        </div>
    </div>

    <div class="cta w-full ">
        <a href=""
            class="w-full flex items-center justify-center py-5 bg-[#F9FAFE] rounded-full font-base font-bold leading-4 text-text-muted transition-colors hover:bg-[#DFE3FA]">+
            Add New Item</a>
    </div>
</section>
{{-- @error($name)
        <p class="text-red-500 text-[12px]">
            {{ $message }}
        </p>
    @enderror --}}

{{-- value="{{ old($name, $value) }}" --}}
