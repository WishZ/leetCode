package maxArea

func maxArea(height []int) int {
	i := 0
	j := len(height) - 1
	res := 0
	for i < j {
		if height[i] < height[j] {
			res = max(res, height[i]*(j-i))
			i += 1
		} else {
			res = max(res, height[j]*(j-i))
			j -= 1
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
