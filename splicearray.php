<title>Splica Array</title>

<script>

Array.prototype.randsplice = function(){
    var ri = Math.floor(Math.random() * this.length);
    var rs = this.splice(ri, 1);
    return rs;
}
Array.prototype.randval = function(){
    var ri = Math.floor(Math.random() * this.length);
    var val = this[ri];
    return val;
}
var my_array = ['A','B','C','D','E','F','G'];
var result = my_array.randsplice();

document.write(result);
document.write("<hr>");
document.write(my_array);
</script>