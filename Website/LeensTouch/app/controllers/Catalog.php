<?php
class Catalog extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('productModel');
    }
        

    public function index(){
        $products = $this->productModel->getProducts();
        $data = [
            "products" => $products
        ];
        $this->view('Catalog/catalog',$data);
    }

    public function viewCart()
    {
        $products = array();
        $cart = $this->productModel->getCart();
        $data = [
            "cart" => $cart
        ];

        foreach ($data['cart'] as $item) {
            $products[] = $this->productModel->getProduct($item->upc);   
        }

        $images = array();
        $names = array();
        foreach ($products as $p) {
            $images[] = $p->image;
            $names[] = $p->product_name;
        }
        $array = json_decode(json_encode($data), true);

        $newarray = array();
        $count = 0;
        foreach ($array['cart'] as $item) {
            $item['image'] = $images[$count];
            $item['name'] = $names[$count];
            $newarray[] = $item;
            $count++;
        }

        // echo "<pre>";
        // var_dump($newarray);
        // echo "</pre>";

        $this->view('Catalog/viewCart',$newarray);

        if (isset($_GET['remove'])) {
            $this->remove($_GET['remove']);
            echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
        }

        if(isset($_POST['dropdown'])){
            foreach ($_POST['dropdown'] as $product) {
                $cart_id = $product['cart_id'];
                $quantity = $product['quantity'];
            }
            $this->productModel->changeQuantity($cart_id, $quantity);
        }

        if(isset($_POST['update'])){
            echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
        }

        // if(isset($_POST['edit'])){
            // header('Location: /LeensTouch/Catalog/editPersonalization');
        // }
    }

    public function editPersonalization($id){
        if(!isset($_POST['update'])){
            $data = $this->productModel->getCustomizations($id);
            $this->view('Catalog/editPersonalization',$data);
        }else{
            $data = $this->productModel->getCustomizations($id);
            if(!is_uploaded_file($_FILES['picture']['tmp_name'])){
                // var_dump($data['profile_image']);
                $filename = $data->image;
            }
            else{
                $filename= $this->imageUpload();
            }
            $dat=[
                'text' => trim($_POST['text']),
                'image' => $filename
            ];
            if($this->productModel->editCustomization($dat, $id)){
                header('location:/LeensTouch/Catalog/viewCart');
                echo '<meta http-equiv="Refresh" content="0; url=/LeensTouch/Catalog/viewCart">';
            }
        }
    }

    public function addToCart(){
        $product = $this->productModel->getProduct($_GET['product_id']);
        $data=[
            'price' => $product->price,
            'upc' => $product->upc
        ]; 
        if($this->productModel->addToCart($data)){
            echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
        }
    }

    public function remove($data){
        $this->productModel->remove($data);
    }

    public function imageUpload(){
        //default value for the picture
        $filename=false;
        
        //save the file that gets sent as a picture
        $file = $_FILES['picture'];
        
        $acceptedTypes = ['image/jpeg'=>'jpg',
            'image/gif'=>'gif',
            'image/png'=>'png'];
        //validate the file
        
        if(empty($file['tmp_name']))
            return false;

        $fileData = getimagesize($file['tmp_name']);

        if($fileData!=false && 
            in_array($fileData['mime'],array_keys($acceptedTypes))){

            //save the file to its permanent location
                
            $folder = dirname(APPROOT).'/public/img';
            $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
            move_uploaded_file($file['tmp_name'], "$folder/$filename");
        }
        return $filename;
    }
}
?>