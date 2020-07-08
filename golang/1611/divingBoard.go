package divingBoard

/**
 * 面试题 16.11. 跳水板
 * 你正在使用一堆木板建造跳水板。有两种类型的木板，其中长度较短的木板长度为shorter，长度较长的木板长度为longer。你必须正好使用k块木板。编写一个方法，生成跳水板所有可能的长度。
 * 返回的长度需要从小到大排列。
 *
 * https://leetcode-cn.com/problems/diving-board-lcci/
 */
func divingBoard(shorter int, longer int, k int) []int {
	min, max, step := shorter*k, longer*k, longer-shorter
	res := make([]int, 0)
	if k == 0 {
		return res
	}
	if min == max {
		res = append(res, min)
		return res
	}
	for i := min; i <= max; i += step {
		res = append(res, i)
	}

	return res
}
