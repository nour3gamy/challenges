<?php 
declare(strict_types=1);

function checkAge(int $age) {
    if($age<=13) echo 'child';
    elseif($age<=17) echo 'teenager';
    elseif($age<18) echo 'adult';
}

function calculateGrade(float $score){
    if($score<=100) echo 'Excellent';
    elseif($score<90) echo 'Very Good';
    elseif($score<80)echo 'Good';
    elseif($score<70)echo 'Pass';
    elseif($score<50)echo 'fail';
    elseif($score>100&& $score<0)echo 'Invalid Score';
}

function analyzeNumber(float $number){
    echo ($number%2==0) ? 'Even <br>' : 'odd <br>';
    if($number>0)echo 'Positive <br>';
    elseif($number<0)echo 'Negative <br>';
    elseif($number===0)echo 'Zero <br>';
}
analyzeNumber(9);

function checkLogin(string $username,int $password){
    if($username=='admin'&& $password==12345) echo "Login successful! Welcome, admin.\n";
    else echo "Invalid username or password. \n ";
}
checkLogin('admin',12345);

function checkTemperature(float $temperature){
if($temperature<0)echo 'Very Cold';
elseif($temperature>=0)echo 'Cold';
elseif($temperature>25)echo 'Warm';
elseif($temperature>35)echo 'Hot';
elseif($temperature>40)echo 'Very Hot';
}

function getDayName(int $day){
    switch ($day ){
        case '1':
            echo 'sat';
        break;
        case '2':
            echo 'sun';
        break;
        case '3':
            echo 'mon';
        break;
        case '4':
            echo 'tue';
        break;
        case '5':
            echo 'wed';
        break;
        case '6':
            echo 'thu';
        break;
        case '7':
            echo 'fri';
        break;
        default :echo 'ReEnter The Number of the day';
    }
}

function getMonthName(int $month){
    switch ($month){
        case '1':
            echo 'jun';
        break;
        case '2':
            echo 'feb';
        break;
        case '3':
            echo 'mar';
        break;
        case '4':
            echo 'apr';
        break;
        case '5':
            echo 'may';
        break;
        case '6':
            echo 'jun';
        break;
        case '7':
            echo 'jul';
        break;
        case '8':
            echo 'aug';
        break;
        case '9':
            echo 'sep';
        break;
        case '10':
            echo 'oct';
        break;
        case '11':
            echo 'nov';
        break;
        case '12':
            echo 'dec';
        break;
        defualt :echo 'ReEnter The Num of the Month' ;
    }
}

function calculate($number1,$number2,$operator){
        switch ($operator){
            case '+':
                echo $number1 + $number2;
                break;
            case '-':
                echo $number1 - $number2;
                break;
            case '*':
                echo $number1 * $number2;
                break;
            case '/':
                if($number2==0)echo 'Cannot divide by zero';
                else echo $number1/$number2;
            break;
            default: echo 'Invalid operators';
        }
}
calculate(9,8,'+');

function trafficLight ($light){
    switch($light){
        case 'Red':
            echo 'stop';
        break;
        case 'Yellow':
            echo 'Get Ready';
        break;
        case 'Green':
            echo 'Go';
        break;
        defualt:echo 'Write the correct color';
    }
}

function checkRole  ($role){
    switch ($role){
        case 'admin':
            echo 'Access granted: Full administrative privileges.';
        break;
        case 'editor':
            echo 'Access granted: You can edit and publish content.';
        break;
        case 'author':
            echo 'Access granted: You can create and edit your own posts.';
        break;
        case 'user':
            echo 'Access granted: Standard user profile access.';
        break;
        case 'guest':
            echo 'Access limited: Browsing in guest mode.';
        break;
        default:echo 'Access denied: Unknown role.';
    }
}

function getStatusMessage  ($status){
    $msg =match ($status) {
        200,201 => 'sucsses',
        400,401,403,404=>'clint error',
        500=>'server Error',
        defualt => 'try anoter status Code'
    };
    echo $msg;
}

function getGrade($score){
echo match (true) {
    $score>90 => 'A' ,
    $score>80 => 'B' ,
    $score>70 => 'C' ,
    $score>60 => 'D' ,
    $score<60 => 'F' ,
    defualt =>  'Enter the right grade of you'
};
}
getGrade(88);

function getShippingCost($country){
echo match ($country) {
    'Egypt'=>  50,
    'Saudi Arabia'=>  100,
    'UAE'=>  120,
    'Kuwait'=>  150,
    defualt=>  200,
};
}
getShippingCost('Egypt');

function getOrderMessage($status){
echo match($status){
    'pending'=>'Your order has been received and is processing.',
    'shipped'=>'Your order is on the way!',
    'delivered'=>'Your order has been delivered successfully.',
    'cancelled'=>'Your order has been cancelled.',
    defualt=>'unknown order status'
};
}
getOrderMessage('pending');

function calculateTicketPrice($age,$day){
    if($age<=0) {
        echo 'Age cannot be Zero';
            return;
    }
    elseif($age<=10) $price=10;
    else $price=20;
    
    switch($day){
        case 'thu':
        case 'fri':
            $finPrice=$price+5;
            break;
        case 'sat':
        case 'sun':
        case 'mon':
        case 'tue':
        case 'wed':
            $finPrice=$price;
        break;
        default:
        echo "Invalid day";
        return;
    }
    echo "Ticket price for a " . $day. ": $" . $finPrice . "\n";
}
calculateTicketPrice(20,'fri');

function calculateDiscount($price,$customerType){
    $dis= match($customerType){
        'regular'=>$dis=0.0,
        'vip'=>$dis=0.5,
        'student'=>$dis=0.1,
        defualt=>'rewrite the customer type',
    };
    $finPrice=$price-$price*$dis ;
    echo 'price: '.$price .'<br>';
    echo 'dis: '.$dis .'<br>';
    echo 'finPrice: '.$finPrice.'<br>';
}
calculateDiscount(90,'student');

function weatherRecommendation($temperature,$weather){
        if($temperature<0)echo 'very Cold, ' ;
        elseif($temperature>=0)echo 'Cold, ' ;
        elseif($temperature>25)echo 'cool, ' ;
        else echo 'hot, ' ;
    switch($weather){
        case 'sunny':
            echo "Don't forget your sunglasses or sunscreen.<br>";
            break;
        case 'rainy':
            echo "Bring an umbrella or waterproof raincoat with you.<br>";
            break;
        case 'snowy':
            echo "Watch out for slippery roads and wear warm boots.<br>";
            break;
        case 'windy':
            echo "Hold onto lightweight items and consider a windbreaker.<br>";
            break;
        default:
            echo "Check conditions before heading out.<br>";
    }
}
weatherRecommendation(20,'sunny');

function processOrder($total,$paymentMethod,$customerType){
switch($paymentMethod){
    case 'cash':
        echo "Cash has No Discount.!, Total = $total<br>";
    break;
    case 'credit':
    match($customerType){
        'vip'=>$dis=0.15,
        'stander'=>$dis=0
    };
    if($customerType=='stander') {
        echo "No Discount.!, Total = $total<br>";
        return;
    }
    else {
        $total=$total+$total*$dis;
        echo "Total = $total<br>" ;
    }
    break;
    }
}
processOrder(900,'cash','vip');
processOrder(900,'credit','vip');
processOrder(900,'credit','stander');

function checkAccess($username,$role,$isActive){
    if(!$isActive) {
        echo "Access Denied: Account for $username is inactive.<br>";
        return ;
    }
    match($role){
        'admin'      => 'Full Read/Write/Delete Access',
        'editor'     => 'Read/Write Access',
        'subscriber' => 'Read-Only Access',
        default      => 'No Permissions Assigned'
    };
    switch($role){
        case 'admin':
            $roleLabel = "Administrator";
        break;
        case 'editor':
            $roleLabel = "Content Editor";
        break;
        case 'subscriber':
            $roleLabel = "Subscriber";
        break;
        default : $roleLabel = "Unknown Role ($role)";
    }
    echo "Access Granted for $username | Role: $roleLabel | Permissions: $role <br>";
}
checkAccess('Alice', 'admin', true);
checkAccess('Bob', 'editor', true);
checkAccess('Charlie', 'subscriber', false);
checkAccess('Dave', 'guest', true);

function calculateOrder($category,$item,$quantity){
    switch($category){
        case 'electronics':
            $categoryName = "Electronics";
            break;
        case 'clothing':
            $categoryName = "Clothing";
            break;
        case 'books':
            $categoryName = "Books";
            break;
        default:
            return "Error: The selected category ($category) is not supported.";
    }
    $itemPrice =match($item){
        'laptop'   => 1200.0,
        'phone'    => 800.0,
        'headset'  => 150.0,
        'shirt'    => 40.0,
        'pants'    => 60.0,
        'shoes'    => 100.0,
        'novel'    => 15.0,
        'textbook' => 80.0,
        default    => null,
    };
    if(!itemPrice){
        echo "Error: Item ($item) is not available under the $categoryName category.";
    }

}