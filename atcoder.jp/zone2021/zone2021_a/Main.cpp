#include <bits/stdc++.h>
using namespace std;

string s;

int main()
{
  cin >> s;
  vector<bool> flag{false, false, false, false};
  int ans = 0;
  for (int i = 0; i < 12; i++)
  {
    if (s.substr(i, 4) == "ZONe")
    {
      ans++;
    }
  }
  cout << ans << endl;
}