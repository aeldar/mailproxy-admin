<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eldar
 * Date: 9/30/13
 * Time: 4:30 PM
 * To change this template use File | Settings | File Templates.
 */

class DovecotHmacmd5 extends PHPUnit_Framework_TestCase {
<<<<<<< HEAD

=======
>>>>>>> 9f40a6e9d48399c2a42a1a8afc1c4be633870b81
    public function testDovecotHmacmd5(){
        $password = 'ifgrfc';
        $hashedPassword = '{HMAC-MD5}52903d01cd334d86e33eeef850de9f2096ebb6cbd9597b2c0adbc1535698030c';
        $this->assertEquals($hashedPassword, dovecot_hmacmd5($password));
    }
<<<<<<< HEAD

=======
>>>>>>> 9f40a6e9d48399c2a42a1a8afc1c4be633870b81
}