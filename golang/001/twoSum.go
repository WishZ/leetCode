package main

import "fmt"

func main() {
	num := []int{1, 2, 3, 4, 7, 8, 9, 19}
	fmt.Println(twoSum(num, 20))
}

func twoSum(nums []int, target int) []int {
	m := make(map[int]int)
	for i, n := range nums {
		x := target - n
		if idx, ok := m[x]; ok {
			return []int{idx, i}
		}
		m[n] = i
	}

	return []int{}
}
