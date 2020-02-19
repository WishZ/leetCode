class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $temp = $nums;
        $result = [];
        foreach ($nums as $key => $num) {
            $res = $target - $num;
            unset($temp[$key]);
            if (in_array($res,$temp)) {
                foreach ($nums as $k => $n) {
                    if ($n == $res) {
                        $result = [$key,$k];
                    }
                }
            }
        }
        return $result;
    }
}