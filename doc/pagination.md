# Pagination

Sometimes the returned result will span across many pages. When listing
resources you can pass the following parameters into _$options_ array of any [methods](./methods.md):

| Parameter | Description |
| --------- | ----------- |
| `page`    | Page number (default: `1`) |
| `per_page`| Number of items to list per page (default: `20`, max: `100`) |

In the example below, we list 50 namespaces per page.  
`craft.gitlab.namespaces(null, {per_page: 50})`

## Returns

If you are resquesting pagination by adding `page` or `per_page` in options, it will returns a `pagination` array along the data.

This array contains:

* `next_page` the number of the next page if any
* `page` the number of current page
* `per_page` the amount of items to return
* `prev_page`the number of the previous page if any
* `total` the total amount of items
* `total_pages` the total amount of page

For more information, please see https://github.com/gitlabhq/gitlabhq/tree/master/doc/api 
