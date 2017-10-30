<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
            public function index(){
import('ORG.Util.Image');
Image::buildImageVerify ( mt_rand(5,10),5,png, 300,100);                      
 $this->display();                   
        }

Public function verify()                {                                

import('ORG.Util.Image');

Image::buildImageVerify ( 2,3,png, 300,100);
 }                                                            
 Public function verifyz(){
 
    import("ORG.Util.Image");
    
 Image::GBVerify(2,"png",30,10 ,'simhei.ttf');
 
                        }
 }         
          
          
            /*  
                                     生成验证码                                                    http://localhost:8080/3.1.2888888888888/ThinkPHP_3.1.2_Clusterp/index.php/index/verify                                            */
                                     
/*

Image::buildImageVerify ( mt_rand(6,12),5,png, 300,100);                      


//位数和类型mt_rand(6,12),5,png,300,100.                   

前面的(6,12)是随机控制位数

后面的5是类型，混合型，sting.class.php字符串类文

件_最重要_验证码是通过字符串类来生成


后面的300,100是验证码图片的长和宽


3个最重要的文件，注意Sting.class.php,共有3个Sting.

class.php容易混乱

注意是Think/Extend/Library/QRG/Util/Sting.class.php

不是Lib/ORG/Util/sting.class.php_不是

不是Think/Lib/ORG/Util/sting.class.php.

Library/ORG/UtiI/sting.class.php字符串类文件_最重要_验证码是通过字

符串类来生成



控制器文件IndexAction.class.php



模板文件


tpl/index/index.html


*/













