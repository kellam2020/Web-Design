<?php
class ColumbusBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;
    public $review;
    public $user;
    public $publishDate;
     

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user'];
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT ColumbusForm.*, users.fullName as user 
        FROM ColumbusForm LEFT JOIN (users)
        ON users.userId=ColumbusForm.reviewerId
        WHERE ColumbusForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new ColumbusBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn) {
     
     
    $selectForms = "SELECT ColumbusForm.*, users.fullName as user
    FROM ColumbusForm 
    LEFT JOIN (users) ON users.userId=ColumbusForm.reviewerId
    ORDER BY ColumbusForm.publishDate DESC
     ";


    $stmt = $conn->prepare($selectForms);
    //$stmt->bindParam(':numForms', $numForms, PDO::PARAM_INT);
    $stmt->execute();
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new ColumbusBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO ColumbusForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}

class NewAlbanyBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;
    public $review;
    public $user;
    public $publishDate;
     
    //public $primaryImage;
   // public $imageTitle;

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user']; 
        
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT NewAlbanyForm.*, users.fullName as user 
        FROM NewAlbanyForm LEFT JOIN (users)
        ON users.userId=NewAlbanyForm.reviewerId
        WHERE NewAlbanyForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new NewAlbanyBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn) {
     
     
    $selectForms = "SELECT NewAlbanyForm.*, users.fullName as user
    FROM NewAlbanyForm 
    LEFT JOIN (users) ON users.userId=NewAlbanyForm.reviewerId
    ORDER BY NewAlbanyForm.publishDate DESC
     ";


    $stmt = $conn->prepare($selectForms);
    $stmt->execute();
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new NewAlbanyBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO NewAlbanyForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}

class UpperArlingtonBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;
    public $review;
    public $user;
    public $publishDate;
      
    
     

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user']; 
        
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT UpperArlingtonForm.*, users.fullName as user 
        FROM UpperArlingtonForm LEFT JOIN (users)
        ON users.userId=UpperArlingtonForm.reviewerId
        WHERE UpperArlingtonForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new UpperArlingtonBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn) {
     
     
    $selectForms = "SELECT UpperArlingtonForm.*, users.fullName as user
    FROM UpperArlingtonForm 
    LEFT JOIN (users) ON users.userId=UpperArlingtonForm.reviewerId
    ORDER BY UpperArlingtonForm.publishDate DESC
     ";


    $stmt = $conn->prepare($selectForms);
    $stmt->execute(); 
    
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new UpperArlingtonBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO UpperArlingtonForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}

class WestervilleBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;
    public $review;
    public $user;
    public $publishDate; 
    
     
     

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user'];
        
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT WestervilleForm.*, users.fullName as user 
        FROM WestervilleForm LEFT JOIN (users)
        ON users.userId=WestervilleForm.reviewerId
        WHERE WestervilleForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new WestervilleBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn)  {
     
     
    $selectForms = "SELECT WestervilleForm.*, users.fullName as user
    FROM WestervilleForm 
    LEFT JOIN (users) ON users.userId=WestervilleForm.reviewerId
    ORDER BY WestervilleForm.publishDate DESC
    ";


    $stmt = $conn->prepare($selectForms);
    $stmt->execute();
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new WestervilleBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO WestervilleForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}

class WorthingtonBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;    
    public $review;
    public $user;
    public $publishDate;

     
    

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user'];
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT WorthingtonForm.*, users.fullName as user 
        FROM WorthingtonForm LEFT JOIN (users)
        ON users.userId=WorthingtonForm.reviewerId
        WHERE WorthingtonForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new WorthingtonBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn) {
     
     
    $selectForms = "SELECT WorthingtonForm.*, users.fullName as user
    FROM WorthingtonForm 
    LEFT JOIN (users) ON users.userId=WorthingtonForm.reviewerId
    ORDER BY WorthingtonForm.publishDate DESC
     ";


    $stmt = $conn->prepare($selectForms);
    $stmt->execute();
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new WorthingtonBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO WorthingtonForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}

class DublinBikeSite {
    // parameters
    public $conn;
    public $formId;
    public $username;
    public $title;
    public $review;
    public $user;
    public $publishDate; 
    
     
     

    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->title = $userInfo['title'];
        $this->formId = $userInfo['formId'];
        $this->review = $userInfo['review'];
        $this->user = $userInfo['user'];
          
    }

    function __destruct() { }
    
  static function getFormById($conn, $formId) {
        $selectForms = "SELECT DublinForm.*, users.fullName as user 
        FROM DublinForm LEFT JOIN (users)
        ON users.userId=DublinForm.reviewerId
        WHERE DublinForm.formId=:formId";
        $stmt = $conn->prepare($selectForms);
        $stmt->bindParam(':formId', $formId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $form = new DublinBikeSite($conn, $listRow);
        
        }
       

        return $form;
    }
    
    static function getFormsFromDb($conn) {
     
     
    $selectForms = "SELECT DublinForm.*, users.fullName as user
    FROM DublinForm 
    LEFT JOIN (users) ON users.userId=DublinForm.reviewerId
    ORDER BY DublinForm.publishDate DESC
     ";


    $stmt = $conn->prepare($selectForms);
    $stmt->execute();
   
    $FormList = array();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        $form = new DublinBikeSite($conn, $listRow);
        $FormList[] = $form;
    }

    return $FormList;
    
}

function form() {
        $insert = "INSERT INTO DublinForm
            (reviewerId, title, review)
            VALUES
            (:reviewerId, :title, :review)";
        $stmt = $this->conn->prepare($insert);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':review', $this->review);
        $stmt->bindParam(':reviewerId', $this->user, PDO::PARAM_INT);
        $stmt->execute();
    }
    
     
    

    
    
}