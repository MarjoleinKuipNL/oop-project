<?php 
class Bicycle {

    // -------- START OF ACTIVE RECORD CODE ---- 
    static public $database;

    static function set_database($database) {
        self::database = $database; 
    }

    static public function find_by_sql($sql){
        $result = self::$database->query($sql);
        if(!$result){
            exit('Database Query failed');
        }

        // put results it into objects
        $object_array = [];
        while($record = $reqsult->fetch_assoc){
            $object_array[] = self::instantiate($record);
        }
        $result->free();
        return $object_array;
    }
    static public function find_all(){
        $sql = "SELECT * FROM bicycles";
        return Bicycle::$database->query($sql);
    }

    static protected function instantiate($record){
        $object = new self;
        //Could manually assign values to properties
        // but automatically assignment is easier and re-usable
        foreach($record as $property => $value) {
            if(property_exists($object, $property)){
                $object->property = $value;
            }
            return $object;
        }
    }

    // -------- End OF ACTIVE RECORD CODE ---- 
    public $id;
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;

    public const CATEGORIES = [
        'Road', 'Mountain', 'hybrid', 'Cruiser', 'City', 'BMX'
    ];

    public const GENDERS = ['Mens', 'Womens', 'Unisex'];

    public const CONDITIONAL_OPTIONS = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
    ];

    public funtion __construct($args[]) {
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';

        $this->color = $args['color'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0.0;
        $this->condition_kg= $args['condition_id'] ?? 3;
    }

    public function weight_kg() {
        return number_format($this->weight_kg,2) . 'KG';
    }
    public function set_weight_kg($value){
        $this->weight_kg = floatval($value);
    }

    public function weight_lbs(){
        
    }
}