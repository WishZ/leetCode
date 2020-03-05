class Solution {
public:
    bool isPalindrome(int n) {
        unsigned i = n;
        unsigned m = 0;
        while (i > 0) {
            m = m * 10 + i % 10;
            i /= 10;
        }
        return m == n;
    }
};