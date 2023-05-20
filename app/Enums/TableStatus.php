<?php 
    namespace App\Enums;

    enum TableStatus:String{
        case Available = 'available';
        case Pending = 'pending';
        case Unavailable = 'unavailable';
    }