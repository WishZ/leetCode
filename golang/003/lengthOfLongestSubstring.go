package main

import (
	"strings"
)

func main() {
	length := lengthOfLongestSubstring("abcdefas")
	println(length)
}
func lengthOfLongestSubstring(s string) int {
	if len(s) == 0 {
		return 0
	}
	var s1 string
	println([]rune(s))
	for m ,l := range []rune(s) {
		println(m,string(l))
	}
	println(s[1])
	println(string(s[1]))
	left := 0
	length := 0
	for i := 0; i < len(s); i++ {
		if index := strings.IndexByte(s1, s[i]); index != -1 {
			left += index + 1
		}
		s1 = s[left : i]
		if len(s1) > length {
			length = len(s1)
		}
	}
	return length
}