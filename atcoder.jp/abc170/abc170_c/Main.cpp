#include <bits/stdc++.h>
using namespace std;

int main()
{
  int X, N;
  cin >> X >> N;
  vector<int> p(N);
  int diff = 201;
  int ans = diff;
  for (int i = 0; i < N; i++)
  {
    cin >> p.at(i);
  }
  for (int i = -1; i <= 101; i++)
  {
    if (find(p.begin(), p.end(), i) != p.end())
    {
      continue;
    }
    if (abs(X - i) < diff)
    {
      diff = abs(X - i);
      ans = X - diff;
      if (find(p.begin(), p.end(), ans) != p.end())
      {
        ans = X + diff;
      }
      
    }
  }
  cout << ans << endl;
}