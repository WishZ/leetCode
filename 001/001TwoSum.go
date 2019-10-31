package twoSum

// func main() {
// 	num := []int{1, 2, 3, 4, 7, 8, 9, 19}
// 	fmt.Println(twoSum(num, 20))
// }

func twoSum(num []int, target int) []int {
	var arr []int
	count := len(num)

	for i := 0; i < count; i++ {
		for j := i + 1; j < count; j++ {
			if num[i]+num[j] == target {
				arr = append(arr, i)
				arr = append(arr, j)
				return arr
			}
		}
	}
	return arr
}
