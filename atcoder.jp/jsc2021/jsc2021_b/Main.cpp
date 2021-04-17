#include <bits/stdc++.h>
using namespace std;

int n, m;

int main()
{
  cin >> n >> m;
  vector<int> a(n);
  vector<int> b(m);
  for (int i = 0; i < n; i++)
  {
    cin >> a.at(i);
  }
  for (int i = 0; i < m; i++)
  {
    cin >> b.at(i);
  }

  vector<int> ans;
  for (int i = 1; i <= 1000; i++)
  {
    auto f1 = find(a.begin(), a.end(), i);
    auto f2 = find(b.begin(), b.end(), i);
    if (*f1 ^ *f2)
    {
      ans.push_back(i);
    }
  }

  if (ans.size() <= 0)
  {
    return 0;
  }

  for (auto i = 0; i < ans.size() - 1; i++)
  {
    cout << ans.at(i) << ' ';
  }
  cout << ans.back() << endl;
}