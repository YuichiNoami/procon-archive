#include <bits/stdc++.h>
using namespace std;

int main()
{
  string S;
  cin >> S;
  int len = S.size();
  int ans = 1;
  for (int i = 0; i < len; i++)
  {
    char t = S.at(i);
    if (t != '1')
    {
      if (t == '+')
      {
        ans++;
      }
      else if (t == '-')
      {
        ans--;
      }
    }
  }
  cout << ans << endl;
}
