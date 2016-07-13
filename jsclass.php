<script>
function exampleClass(){
	
	this.proprerty2="Hello World";
this.method1=function method1(arg1){
	return arg1+""+this.proprerty2;	
}	
}
var instance1=new exampleClass();
alert(instance1.method1("Hello33"));

</script>