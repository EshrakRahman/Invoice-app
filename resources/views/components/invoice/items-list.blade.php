<section x-data="{
    items: [{ name: '', qty: 1, price: 0 }],
    addItem() {
        this.items.push({ name: '', qty: 1, price: 0 });
    },
    removeItem(index) {
        this.items.splice(index, 1);
    }
}" class="w-full flex flex-col gap-6">

    <template x-for="(item, index) in items" :key="index">
        <div class="flex flex-col gap-6 mb-8 border-b border-light-card pb-8 lg:border-none lg:pb-0">

            <div class="flex flex-col gap-3">
                <label class="text-[13px] font-medium text-text-muted">Item Name</label>
                <input x-model="item.name" class="bg-white border py-4 rounded-lg px-3 border-light-card" type="text">
            </div>

            <div class="quantity-info flex gap-3 items-center w-full">
                <div class="flex flex-col gap-3 w-[20%]">
                    <label class="text-[13px] font-medium text-text-muted">Qty.</label>
                    <input x-model.number="item.qty" class="bg-white border py-4 rounded-lg px-3 border-light-card"
                        type="number">
                </div>

                <div class="flex flex-col gap-3 w-[30%]">
                    <label class="text-[13px] font-medium text-text-muted">Price</label>
                    <input x-model.number="item.price" class="bg-white border py-4 rounded-lg px-3 border-light-card"
                        type="number">
                </div>

                <div class="flex flex-col gap-3 w-[30%]">
                    <label class="text-[13px] font-medium text-text-muted">Total</label>
                    <div class="py-4 px-3 font-bold text-grayish-blue">
                        £ <span x-text="(item.qty * item.price).toFixed(2)"></span>
                    </div>
                </div>

                <div class="flex w-[10%] pt-6">
                    <button @click="removeItem(index)" type="button" class="hover:brightness-75 transition-all">
                        <img src="{{ Vite::asset('resources/images/icon-delete.svg') }}" alt="Delete">
                    </button>
                </div>
            </div>
        </div>
    </template>

    <div class="cta w-full">
        <button type="button" @click="addItem()"
            class="w-full flex items-center justify-center py-5 bg-[#F9FAFE] rounded-full font-bold text-text-muted hover:bg-[#DFE3FA] transition-colors">
            + Add New Item
        </button>
    </div>
</section>
