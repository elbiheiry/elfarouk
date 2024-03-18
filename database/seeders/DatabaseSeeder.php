<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Home;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        About::create([
            'title' => 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية',
            'description' => 'عند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.',
            'image' => 'about.png',
            'video' => 'https://www.youtube.com/watch?v=4hqDQRc8N04&ab_channel=AlFaroukFoods'
        ]);

        Home::create([
            'title1' => 'الفاروق للصناعات الغذائية',
            'description1' => 'هي إحدى شركات تصنيع الوجبات الخفيفة. جودة عالمية على ارض مصرية',
            'title2' => 'الوكلاء والموزعين',
            'description2' => 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية',
            'title3' => 'الهيكل الإدارى',
            'description3' => 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية',
            'title4' => 'الميديا',
            'description4' => 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية',
            'image1' => 'slide_product1_1.png',
            'image2' => 'slide_product1_2.png'
        ]);

        Setting::create([
            'address' => 'زنارة - بابل - طريق شبين طنطا - المنوفية',
            'sales' => '01006607477',
            'complaints' => '01211423111',
            'email' => 'info@alfaroukfoods.com',
            'phone' => '01006607477',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg',
            'facebook' => 'https://www.facebook.com/alfaroukfoods',
            'youtube' => 'https://www.youtube.com/channel/UCXn4azaEARC3qDaGGsojMOQ',
            'instagram' => 'https://www.instagram.com/alfaroukfoods/'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@alfaroukfoods.com',
            'password' => Hash::make('Admin123')
        ]);
    }
}
