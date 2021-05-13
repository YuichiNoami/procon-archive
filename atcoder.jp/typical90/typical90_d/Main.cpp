#include <bits/stdc++.h>
using namespace std;

int h, w;

int main()
{
  cin >> h >> w;
  vector<vector<int>> row(h, vector<int>(w));
  vector<vector<int>> col(w, vector<int>(h));
  for (int i = 0; i < h; i++)
  {
    for (int j = 0; j < w; j++)
    {
      int tmp;
      cin >> tmp;
      row.at(i).at(j) = tmp;
      col.at(j).at(i) = tmp;
    }
  }
  vector<int> sums(h);
  for (int i = 0; i < h; i++)
  {
    int sum = 0;
    for (auto &&n : row.at(i))
    {
      sum += n;
    }
    sums.at(i) = sum;
  }

  vector<int> sums2(w);
  for (int i = 0; i < w; i++)
  {
    int sum2 = 0;
    for (auto &&n : col.at(i))
    {
      sum2 += n;
    }
    sums2.at(i) = sum2;
  }

  for (int i = 0; i < h; i++)
  {
    for (int j = 0; j < w; j++)
    {
      cout << sums.at(i) + sums2.at(j) - row.at(i).at(j) << ' ';
    }
    cout << endl;
  }
}