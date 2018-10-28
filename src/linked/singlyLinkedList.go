package linked

//单向链表
type Node struct {
	//车体
	data Object //车体的内容
	next *Node  //牵着下节车体的绳索  指针表示
}

type Object interface {}

//车队
type List struct {
	size uint64 //数量
	head *Node  //车头
	tail *Node  //车尾
}

//初始化
func (list *List) Init() {
	(*list).size = 0 //此时链表是空的
	(*list).head = nil
	(*list).tail = nil
}

//追加元素

func (list *List) Append(node *Node) bool {
	// if (*list).size == 0 { //无元素时添加
	// 	(*list).head = node //单链表的第一个元素
	// 	(*list).tail = node //同时也是尾部
	// 	(*list).size = 1    //元素数量为1
	// } else { //已有元素时添加
	// 	oldTail := (*list).tail
	// 	(*oldTail).next = node //node 放入原尾部的后面
	// 	(*list).tail = node    //node 成为新的尾部
	// 	(*list).size++         //元素数量增加
	// }

	//优化
	//1 node为空 添加无意义
	//2 代码重复
	//3 返回添加成功与否
	if node == nil {
		return false
	}
	(*node).next = nil
	//将新元素放入单链表中
	if (*list).size == 0 {
		(*list).head = node
	} else {
		oldTail := (*list).tail
		(*oldTail).next = node
	}

	//调整尾部位置 及链表数量
	(*list).tail = node
	(*list).size++
	return true
}

//插队
func (list *List) Insert(i uint64, node *Node) bool {
	//空的节点、索引超出范围和空链表都无法进行插入操作
	if node == nil || i > (*list).size || (*list).size == 0 {
		return false
	}

	if i == 0 { //直接拍第一
		(*node).next = (*list).head
		(*list).head = node
	} else {
		//找到前一个
		preItem := (*list).head
		var j uint64
		for j = 1; j < i; j++ { //数前面i个元素
			preItem = (*preItem).next
		}
		//原来元素放在新元素后面 新元素放到前一个元素后面
		(*node).next = (*preItem).next
		(*preItem).next = preItem
	}
	(*list).size++
	return true
}

//移除元素
func (list *List) Remove(i uint64, node *Node) bool {
	if i >= (*list).size {
		return false
	}

	if i == 0 { //移除头部
		node = (*list).head
		(*list).head = (*node).next
		if (*list).size == 1 { //如果只有一个元素 那尾部也要调整
			(*list).tail = nil
		}
	} else {
		var j uint64
		preItem := (*list).head
		for j = 1; j < i; j++ {
			preItem = (*preItem).next
		}

		node = (*preItem).next
		(*preItem).next = (*node).next

		if i == ((*list).size - 1) { //若删除的尾部 尾部指针需要调整
			(*list).tail = preItem
		}
	}
	(*list).size--
	return true
}

//获取

func (list *List) Get(i uint64) *Node {
	if i >= (*list).size {
		return nil
	}
	var j uint64
	item := (*list).head
	for j = 0; j < i; j++ {
		item = (*item).next
	}

	return item
}
