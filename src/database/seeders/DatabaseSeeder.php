use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->createContacts();
        $this->createCategories();
    }

    /**
     * 
     *
     * @return void
     */
    private function createContacts() {

        Contact::factory()->count(35)->create();
    }

    /**
     * 
     *
     * @return void
     */
    private function createCategories() {

        $categories = [
            '商品のお届けについて',
            '商品の交換について',
            '商品トラブル',
            'ショップへのお問い合わせ',
            'その他',
    ];

        foreach ($categories as $category) {
        
            Category::create(['content' => $category]);
        }
    }
}


