<?php
// grade nilai aWal

// status awal
function kelulusan($_nilai) {
    if ($_nilai > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}

function grade($nilai) {
    // isi fungsi grade
    if($nilai<36 and $nilai>=0) 
    {
        
        $grade= "e";    
        return $grade;
        
    }
    elseif($nilai>=36 and $nilai<=55)
    {
        
        $grade= "d";
        return $grade;
        
    }
    elseif($nilai>=56 and $nilai<=69)
    
    {
        
        $grade= "c";
        return $grade;
        
    }
    
    elseif($nilai>=70 and $nilai<=84)
    {
        
        $grade= "b";
        return $grade;
        
    }
    
    elseif($nilai>=85 and $nilai<=100)
    
    {
        
        $grade= "a";
        return $grade;
    }
    
    else{
        
        return "i";
        
    }
    // Grade nilai akhir
}

function predikat() // argumen nya E,D,C,B,A
{
    // isi fungsi predikat
    global $grade;
    switch ($grade) {
        case 'e':
            return "sangat kurang";
            break;
            
            case 'd':
                return "kurang";
                break;
                
                case 'c':
                    return "cukup";
                    break;
                    
                    case 'b':
                        return "memuaskan";
                        break;
                        
                        case 'a':
                            return "sangat memuaskan";
                            break;
                            
                            case 'i':
                                return "tidak ada";
                                break;
                                
                                default:
                                # code...
                                break;
                            }
                        }
                        // Akhir
                        ?>