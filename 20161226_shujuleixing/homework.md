
1. 列举JavaScript中的数据类型（六种）
number,string,boolean,null,undefined,object

列举布尔类型、Undefined、Null的值。
	
	true,flase.undefined.null
2. 谈谈你对undefined和null的理解。
	undefined 和null 的数值都为空，他们可以==。
	但是一个是找不到对象，一个是没有，为空，他们的类型不一样。
3. 怎么判断一个值得类型，并举例说明。
	用typeof 
	如：typeof h
4. JavaScript中数据类型的转换方式有？请一一列举，并举例说明。
	强制转换：var j =Number(h);  
		  var b =String(a);
	自动转换: 123 + 'abc' = 123abc"
		  "123"+ true +321 = 123true321
