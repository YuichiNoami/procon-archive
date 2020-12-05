#include <bits/stdc++.h>
using namespace std;

int main()
{
  int N;
  cin >> N;
  long ans = 1;
  for (int i = 2; i <= N; i++)
  {
    ans = lcm(ans, i);
  }
  cout << ans + 1 << endl;
}