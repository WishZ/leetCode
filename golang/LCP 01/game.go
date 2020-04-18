package LCP_01

func game(guess []int, answer []int) int {
	res := 0
	for k, i := range guess {
		b := answer[k]
		if b == i {
			res++
		}
	}
	return res
}
