namespace App\Http\Controllers;


use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index(){
        $tittle = "Daftar Produk";
        $products = [
            ['id' => 101, 'name' => 'Laptop', 'price' => 15000000],
            ['id' => 102, 'name' => 'Smartphone', 'price' => 5000000],
            ['id' => 103, 'name' => 'Tablet', 'price' => 3000000],
        ];
        
        return view('produk.index', compact('tittle', 'products'));
    }
    public function create(){
        return view('produk.create');
    }
    public function search(){
        return view('produk.search');
    }
    public function detail(){
        return view('produk.detail');
    }
}