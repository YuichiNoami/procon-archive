#include <bits/stdc++.h>
using namespace std;

int a, b;

int main()
{
  cin >> a >> b;
  for (int i = b;; i--)
  {
    if ((a + i - 1) / i < b / i)
    {
      cout << i << endl;
      return 0;
    }
  }
}