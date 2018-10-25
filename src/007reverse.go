package main

import (
	"math"
	"fmt"
)

func main() {
	fmt.Println(reverse(12345654))
}

func reverse(x int) int {
	res := 0
	for x != 0 {
		pop := x % 10
		x /= 10
		if (res > math.MaxInt32 / 10 || (res == math.MaxInt32 / 10 && pop > 7)) {
			return 0
		}
		if (res < math.MinInt32 / 10 || (res == math.MinInt32 / 10 && pop < -8)) {
			return 0
		}
		res = res * 10 + pop
	}
	return res
}
