<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $selectedCategory = 'All';
    
    public $products = [
        [
            'name' => 'Product One',
            'category' => 'SaaS',
            'price' => '$49/mo',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA03KOAQB67QM5Fb2JTNjwBxXzbgeyH4_mkxbHTMi_ShDtEaWF-FT1u7a9xT5_uq8N0HIgs14XeoRpwCOYA3HBpdQB811MkY60rTiYzYcR7VBcPxkRxrJXGQSJMxVeUEYcbijymtEjSV_F6BtH5TMmOpEfqwkqmj4ag9Xyb4T97YMiA4VPPQX8SucWrZuzJuLdSRgFQWFONhIzsUxc-4HKqL-OUA8I6bGPy3pWyP9TUzW9HFlwv2Xj01Z6G9zB-xIGim14Cwo5cFYfH'
        ],
        [
            'name' => 'Product Two',
            'category' => 'eBooks',
            'price' => '$29',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAUhxU06Q9afyUDpFZvdyj6iVc34KbGsBa45Euo65xK4QE2rEvKkadIERtUjEmoE4KWNwXMgnMTu_BBXc7VZe1rwA8wjDXIg6tLZb7PoBBLyHEwIR7rd32bCDABMBsi02x4FnrAN9uRFTuXFkMUxgZfPpzcX8ub7SrHb9IuMi4widtG0-7s_Xb-zWdbLUPsOwApeFGB2QM5WyUJs-uS7mJjtsF2aZaSKvAzlgzgPkoP20vVJPyuQ3I2Sd6XbQ6VtfbdaWcBMfuvYNXl'
        ],
        [
            'name' => 'Product Three',
            'category' => 'SaaS',
            'price' => '$99/mo',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuASgbEIa96JsWSRnJIPIG3zVDXAl_UvEo7QxYCsPLgI-c0ypNOyuwBYq4yh8KeUtdzzGVSKIO3Im1knA4WPRXPmws1RWh2mHXV_uU_O7Z_690_Vf5bvqirrbyy1epTprhDSV2naXt91TD2tyBm5aFfzizMfy4XNrQ-aEfrB7BszFnNH7UcpUSC9upFdqzZm45PovcxSc1VAVANQv0emHJeuPRMhDfjNRUyaflOv-oqrATX3tsNJV3GFtNfPWrqbQl_l1fXKrARakmVg'
        ],
        [
            'name' => 'Product Four',
            'category' => 'Templates',
            'price' => '$39',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCMSP03_xEE94ntvh9NK7AvVeriBpuflfxxSToAp2q7unuCaqnRXl2K5tT2QWn25XcI-wl9_3G0ZHkZTN9X5K1SmOwpgHY5QrdiP4Ih3JZ2XLALkoKlAUAWWbGwiK40Iwc6ISR6mErBzO73yoZT2GQcc5nHJ9zWLWUldnl7HRY2ZmBs4dJyczSqU2WtU7_VE6_CWb22_vWn5EmXTT-RXc1iV6f1UJQ80BWbCI67IXO_w2_G4Q5XcwTHyXmaBgbAI1Z9nRH_tT2xEF6q'
        ],
        [
            'name' => 'Product Five',
            'category' => 'SaaS',
            'price' => '$19/mo',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-35uVjv1XNl4buFOvMU-X4eiZkYAEKaBxXQLI0gypC_FSCTGEdwof9tPxJZndiZCvfuN-FLHB30HEzLVJUDOg7v25Hm0aZN2ucphsSexThqrKxHZrL2rNFyl8OMiaAPNhh45pkX9e2zPTJO6xDcfHaEEcaOU6xbKlS0h6B0t3rlYB4OcisTkmG_rwTbioNm8t1b46LagzPAI5jAc8RbH_1DprrAnjcMNrdDngYDpZ9XXjJhW90rg1mVd2OpKIj9Q0vPXfP6K377Eh'
        ],
        [
            'name' => 'Product Six',
            'category' => 'eBooks',
            'price' => '$19',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDnlwlyfHbtzKVsvyc_RmGQOh-6fZAkWpRhX-xUWUp35_VxHEtUleP-lZqnKKPLcI8JA1ulywKYqjAv15wR9TLNZSRapKl_fDNYjuo5wGh1S0Nvy2eUv6mvcc2vDp_xWFE1XndKT79tZPtH8pVUsYllPgM79kDU_gls1Im1ZG08pHnt48zF3_MDY20ZTgd9tNEMbcqm2ol7crGRsn5_F_3qfkpUeI8HbDvbskDjvV0lrkEwcnfjkPVskeIYWcIROjCxzOPQGfEgmuMe'
        ],
    ];
    
    public function filterBy($category)
    {
        $this->selectedCategory = $category;
    }
    
    public function getFilteredProductsProperty()
    {
        if ($this->selectedCategory === 'All') {
            return $this->products;
        }
        
        return collect($this->products)->filter(function ($product) {
            return $product['category'] === $this->selectedCategory;
        })->values()->toArray();
    }

    public function render()
    {
        return view('livewire.landing-page.product')
                    ->layout('livewire.layouts.app');
    }
}
