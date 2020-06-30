package maxarea

func maxArea(height []int) int {
	i := 0
	j := len(height) - 1
	res := 0
	for i < j {
		if height[i] < height[j] {
			res = max(res, height[i]*(j-i))
			i++
		} else {
			res = max(res, height[j]*(j-i))
			j--
		}
	}
	return res
}

func max(x, y int) int {
	if x > y {
		return x
	}
	return y
}
