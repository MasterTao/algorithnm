<?php
/**
 * Created by PhpStorm.
 * User: 徐涛
 * Date: 2018/1/18
 * Time: 23:33
 */

class Node {

    private $value;
    private $leftChild = null;
    private $rightChild = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function hasLeftChild()
    {
        if ($this->leftChild != null) {
            return true;
        } else {
            return false;
        }
    }

    public function hasRightChild()
    {
        if ($this->rightChild != null) {
            return true;
        } else {
            return false;
        }
    }

    public function getLeftChild()
    {
        return $this->leftChild;
    }

    public function getRightChild()
    {
        return $this->rightChild;
    }

    public function setLeftChild(Node $node)
    {
        $this->leftChild = $node;
    }

    public function setRightChild(Node $node)
    {
        $this->rightChild = $node;
    }

    // 先序
    public function preOrder(Node $root)
    {
        $nodes = new SplStack();

        if ($root->value) {
            $nodes->push($root);
        }

        while (!$nodes->isEmpty()) {
            $node = $nodes->pop();
            echo $node->value . '<br />';

            if ($node->hasRightChild()) {
                $nodes->push($node->getRightChild());
            }

            if ($node->hasLeftChild()) {
                $nodes->push($node->getLeftChild());
            }
        }
    }

    // 先序 递归
    public function preOrderRecursively(Node $root)
    {
        if ($root->value) {
            echo $root->value . '<br />';
        }

        if ($root->hasLeftChild()) {
            $this->preOrderRecursively($root->getLeftChild());
        }

        if ($root->hasRightChild()) {
            $this->preOrderRecursively($root->getRightChild());
        }
    }

    // 中序
    public function inOrder(Node $root)
    {
        $nodes = new SplStack();

        if ($root->value) {
            $nodes->push($root);
        }

        $centerNode = $root;
        while (!$nodes->isEmpty()) {
            while ($centerNode->hasLeftChild()) {
                $centerNode = $centerNode->getLeftChild();
                $nodes->push($centerNode);
            }

            $centerNode = $nodes->pop();
            echo $centerNode->value . '<br />';

            if ($centerNode->hasRightChild()) {
                $centerNode = $centerNode->getRightChild();
                $nodes->push($centerNode);
            }
        }
    }

    // 中序 递归
    public function inOrderRecursively(Node $root)
    {
        if ($root->hasLeftChild()) {
            $this->inOrderRecursively($root->getLeftChild());
        }

        if ($root->value) {
            echo $root->value . '<br />';
        }

        if ($root->hasRightChild()) {
            $this->inOrderRecursively($root->getRightChild());
        }
    }

    // 后序
    public function afterOrder(Node $root)
    {
        $pushNodes = new SplStack();
        $outNodes = new SplStack();

        if ($root->value) {
            $pushNodes->push($root);
        }

        while (!$pushNodes->isEmpty()) {
            $centerNode = $pushNodes->pop();
            $outNodes->push($centerNode);

            if ($centerNode->hasLeftChild()) {
                $pushNodes->push($centerNode->getLeftChild());
            }

            if ($centerNode->hasRightChild()) {
                $pushNodes->push($centerNode->getRightChild());
            }
        }

        while (!$outNodes->isEmpty()) {
            $node = $outNodes->pop();
            echo $node->value . '<br />';
        }
    }

    public function afterOrderRecursively(Node $root)
    {
        if ($root->hasLeftChild()) {
            $this->afterOrderRecursively($root->getLeftChild());
        }

        if ($root->hasRightChild()) {
            $this->afterOrderRecursively($root->getRightChild());
        }

        if ($root->value) {
            echo $root->value . '<br />';
        }
    }
}


$node1 = new Node('a');
$node2 = new Node('b');
$node3 = new Node('c');
$node4 = new Node('d');
$node5 = new Node('e');
$node6 = new Node('f');
$node7 = new Node('g');

$node1->setLeftChild($node2);
$node1->setRightChild($node3);

$node2->setLeftChild($node4);
$node2->setRightChild($node5);

$node3->setLeftChild($node6);
$node3->setRightChild($node7);

//$node1->preOrder($node1);
//$node1->preOrderRecursively($node1);


$node1->inOrder($node1);
$node1->inOrderRecursively($node1);


//$node1->afterOrder($node1);
//$node1->afterOrderRecursively($node1);

















