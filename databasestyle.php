<?php
	
?>
<!--
	数据库(表)设计3范式 
		第一范式(1NF)
			数据达到原子性，数据不能再分
		第二范式(2NF)
			使每一行数据具有唯一性，并清除数据之间的"部分依赖"
			使一个表中的非主键字段，完全依赖于主键字段
				经验上：常常是每个表都要设计主键，并通常多数情况下，使每一个自增长的int类型的字段当做主键
			实际，有2个方面的要求
				1.每一行数据具有唯一性，主要给表设计主键，就可以保证唯一性
				2.消除数据之间的"部分依赖"
			什么叫做依赖？
				就是在一个表中，其中某个字段的值B可以由另一个字段A来决定
				此时我们就称为
					字段B依赖字段A
					字段A决定字段B
				其意思是，如果根据字段A的某个值，一定可以找出一个确定的字段B的值，就是字段A决定B
				 对一个有主键的值，这种情况就成了：
					确定主键字段的值，则其他字段就肯定确定了
			什么叫做部分依赖？
				如果某个字段，只依赖于部分主键字段，此时就称为部分依赖--发生此情况的前提是主键字段有多个
			什么叫做完全依赖？
				就是某个字段，依赖与主键的所有字段
					--推论，如果一个表的主键只有一个字段，则此时必然是完全依赖
		第三范式(3NF)
			独立性，消除传递依赖
			使每个字段都独立的依赖主键字段(独立性)，而要消除其中部分非主键字段的内部依赖--这种内部依赖会造成传递依赖
		经验总结
			通常在设计表的时候，只要遵循这样一个原则，就可以满足前述3范式的原则
				每一种数据，只用一个表存储
-->