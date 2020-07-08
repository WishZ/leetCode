package multiply

/**
 *
 * 递归乘法。 写一个递归函数，不使用 * 运算符， 实现两个正整数的相乘。可以使用加号、减号、位移，但要吝啬一些。
 *
 * https://leetcode-cn.com/problems/recursive-mulitply-lcci/
 */
func multiply(A int, B int) int {
	if A == 0 || B == 0 {
		return 0
	}

	if A == 1 {
		return B
	}

	if B == 1 {
		return A
	}
	ans := 0
	if A >= B {
		ans = multiply(A ,B-1) + A
	}

	if A < B {
		ans = multiply(A - 1 ,B) + B
	}

	return ans
}