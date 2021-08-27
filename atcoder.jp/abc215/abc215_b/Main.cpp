#include <bits/stdc++.h>
using namespace std;
using ll = int64_t;

int main()
{
  ll n;
  cin >> n;
  ll ans = 1;
  for (ll i = 0; i <= n; i++)
  {
    if (ans > n)
    {
      ans = i - 1;
      break;
    }
    ans *= 2;
  }
  cout << ans << endl;
}