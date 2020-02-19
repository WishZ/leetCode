package removeElement

// func main() {
// 	num := []int{1,2,3,4,5,6}
// 	fmt.Println(removeElement(num,4))
// }

func removeElement(nums []int, val int) int {
	i := 0
	count := len(nums)
	for i < count {
		if nums[i] == val {
			count--
			nums[i] = nums[count]
		} else {
			i++
		}
	}
	return i
}
