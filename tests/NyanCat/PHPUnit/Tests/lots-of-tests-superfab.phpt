--TEST--
phpunit -c ../_files/phpunit.xml --repeat 5 ../_files/ResultPrinterTest.php
--FILE--
<?php
$_SERVER['TERM']    = 'xterm';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = '--repeat';
$_SERVER['argv'][4] = '5';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/ResultPrinterTest.php';

require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %a

 [32m0[0m
 [31m0[0m
 [36m0[0m
 
[4A[5C[38;5;154m-[0m
[5C[38;5;154m-[0m
[5C[38;5;154m-[0m
[5C[38;5;154m-[0m
[4A[6C_,------,  
[6C_|  /\_/\  
[6C~|_( - .-) 
[6C ""  ""    
[4A [32m1[0m
 [31m0[0m
 [36m0[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m
[4A[7C_,------,  
[7C_|   /\_/\ 
[7C^|__( ^ .^)
[7C  ""  ""   
[4A [32m1[0m
 [31m1[0m
 [36m0[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m
[4A[8C_,------,  
[8C_|  /\_/\  
[8C~|_( o .o) 
[8C ""  ""    
[4A [32m1[0m
 [31m2[0m
 [36m0[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m
[4A[9C_,------,  
[9C_|   /\_/\ 
[9C^|__( o .o)
[9C  ""  ""   
[4A [32m1[0m
 [31m2[0m
 [36m1[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m
[4A[10C_,------,  
[10C_|  /\_/\  
[10C~|_( - .-) 
[10C ""  ""    
[4A [32m1[0m
 [31m2[0m
 [36m2[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m
[4A[11C_,------,  
[11C_|   /\_/\ 
[11C^|__( - .-)
[11C  ""  ""   
[4A [32m2[0m
 [31m2[0m
 [36m2[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m
[4A[12C_,------,  
[12C_|  /\_/\  
[12C~|_( ^ .^) 
[12C ""  ""    
[4A [32m2[0m
 [31m3[0m
 [36m2[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m
[4A[13C_,------,  
[13C_|   /\_/\ 
[13C^|__( o .o)
[13C  ""  ""   
[4A [32m2[0m
 [31m4[0m
 [36m2[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m
[4A[14C_,------,  
[14C_|  /\_/\  
[14C~|_( o .o) 
[14C ""  ""    
[4A [32m2[0m
 [31m4[0m
 [36m3[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m
[4A[15C_,------,  
[15C_|   /\_/\ 
[15C^|__( - .-)
[15C  ""  ""   
[4A [32m2[0m
 [31m4[0m
 [36m4[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m
[4A[16C_,------,  
[16C_|  /\_/\  
[16C~|_( - .-) 
[16C ""  ""    
[4A [32m3[0m
 [31m4[0m
 [36m4[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m
[4A[17C_,------,  
[17C_|   /\_/\ 
[17C^|__( ^ .^)
[17C  ""  ""   
[4A [32m3[0m
 [31m5[0m
 [36m4[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m
[4A[18C_,------,  
[18C_|  /\_/\  
[18C~|_( o .o) 
[18C ""  ""    
[4A [32m3[0m
 [31m6[0m
 [36m4[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m
[4A[19C_,------,  
[19C_|   /\_/\ 
[19C^|__( o .o)
[19C  ""  ""   
[4A [32m3[0m
 [31m6[0m
 [36m5[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m
[4A[20C_,------,  
[20C_|  /\_/\  
[20C~|_( - .-) 
[20C ""  ""    
[4A [32m3[0m
 [31m6[0m
 [36m6[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m
[4A[21C_,------,  
[21C_|   /\_/\ 
[21C^|__( - .-)
[21C  ""  ""   
[4A [32m4[0m
 [31m6[0m
 [36m6[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m
[4A[22C_,------,  
[22C_|  /\_/\  
[22C~|_( ^ .^) 
[22C ""  ""    
[4A [32m4[0m
 [31m7[0m
 [36m6[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m
[4A[23C_,------,  
[23C_|   /\_/\ 
[23C^|__( o .o)
[23C  ""  ""   
[4A [32m4[0m
 [31m8[0m
 [36m6[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m
[4A[24C_,------,  
[24C_|  /\_/\  
[24C~|_( o .o) 
[24C ""  ""    
[4A [32m4[0m
 [31m8[0m
 [36m7[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m
[4A[25C_,------,  
[25C_|   /\_/\ 
[25C^|__( - .-)
[25C  ""  ""   
[4A [32m4[0m
 [31m8[0m
 [36m8[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m
[4A[26C_,------,  
[26C_|  /\_/\  
[26C~|_( - .-) 
[26C ""  ""    
[4A [32m5[0m
 [31m8[0m
 [36m8[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m
[4A[27C_,------,  
[27C_|   /\_/\ 
[27C^|__( ^ .^)
[27C  ""  ""   
[4A [32m5[0m
 [31m9[0m
 [36m8[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m
[4A[28C_,------,  
[28C_|  /\_/\  
[28C~|_( o .o) 
[28C ""  ""    
[4A [32m5[0m
 [31m10[0m
 [36m8[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m
[4A[29C_,------,  
[29C_|   /\_/\ 
[29C^|__( o .o)
[29C  ""  ""   
[4A [32m5[0m
 [31m10[0m
 [36m9[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m
[4A[30C_,------,  
[30C_|  /\_/\  
[30C~|_( - .-) 
[30C ""  ""    
[4A [32m5[0m
 [31m10[0m
 [36m10[0m
 
[4A[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m[38;5;33m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m[38;5;33m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m[38;5;33m_[0m
[5C[38;5;154m-[0m[38;5;154m_[0m[38;5;148m-[0m[38;5;184m_[0m[38;5;184m-[0m[38;5;214m_[0m[38;5;214m-[0m[38;5;208m_[0m[38;5;208m-[0m[38;5;203m_[0m[38;5;203m-[0m[38;5;198m_[0m[38;5;198m-[0m[38;5;199m_[0m[38;5;199m-[0m[38;5;164m_[0m[38;5;164m-[0m[38;5;129m_[0m[38;5;129m-[0m[38;5;93m_[0m[38;5;93m-[0m[38;5;63m_[0m[38;5;63m-[0m[38;5;63m_[0m[38;5;33m-[0m[38;5;33m_[0m
[4A[31C_,------,  
[31C_|   /\_/\ 
[31C^|__( - .-)
[31C  ""  ""   
[4A 
 
 
 


Time: %s, Memory: %sMb

There were 5 errors:

1) ResultPrinterTest::testError
%s

%s:%i

2) ResultPrinterTest::testError
%s

%s:%i

3) ResultPrinterTest::testError
%s

%s:%i

4) ResultPrinterTest::testError
%s

%s:%i

5) ResultPrinterTest::testError
%s

%s:%i

--

There were 5 failures:

1) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

2) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

3) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

4) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i

5) ResultPrinterTest::testFailure
Failed asserting that false is true.

%s:%i
[37;41m                                                                             [0m
[37;41mFAILURES!                                                                    [0m
[37;41mTests: 25, Assertions: 10, Failures: 5, Errors: 5, Incomplete: 5, Skipped: 5.[0m

