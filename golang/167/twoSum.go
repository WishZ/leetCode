package main

// https://leetcode-cn.com/problems/two-sum-ii-input-array-is-sorted/
func twoSum(numbers []int, target int) []int {
	i := 0
	j := len(numbers) - 1

	for i< j {
		sum := numbers[i] + numbers[j]
		if sum < target {
			i++
		}
		if sum > target {
			j--
		}
		if sum == target {
			return []int{i+1,j+1}
		}
	}

	return []int{0}
}

func main () {
	numbers := []int{1,2,3,4,15,16}
	res := twoSum(numbers,16)
	print(res)
}