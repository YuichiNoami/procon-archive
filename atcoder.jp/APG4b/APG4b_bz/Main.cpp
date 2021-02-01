#include <bits/stdc++.h>
using namespace std;

int n;

int main()
{
  cin >> n;
  vector<int> A(n);
  map<int, int> m;
  for (int i = 0; i < n; i++)
  {
    int a;
    cin >> a;
    A.at(i) = a;
    m[a]++;
  }
  int mx = 0;
  int ans = -1;
  for (auto i : A)
  {
    if (mx < m.at(i))
    {
      mx = m.at(i);
      ans = i;
    }
  }
  cout << ans << ' ' << mx << endl;
}