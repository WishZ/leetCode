class Solution:
    def twoSum(self, nums, target: int):
        hashdict = {}
        for i, num in enumerate(nums):
            complement = target - num
            if complement in hashdict and i != hashdict[complement]:
                return [i, hashdict[complement]]
            hashdict[num] = i
        
        return hashdict