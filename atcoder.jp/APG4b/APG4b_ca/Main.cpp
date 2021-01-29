#include <bits/stdc++.h>
using namespace std;

int n;

int main()
{
  cin >> n;
  vector<pair<int, int>> list(n);
  vector<pair<int, int>> dummy(n);
  for (int i = 0; i < n; i++)
  {
    int a, b;
    cin >> a >> b;
    list.at(i) = make_pair(b, a);
  }

  sort(list.begin(), list.end());

  for (int i = 0; i < n; i++)
  {
    int a, b;
    tie(b, a) = list.at(i);
    cout << a << ' ' << b << endl;
  }
}