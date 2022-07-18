import { InnerBlocks, useBlockProps, useInnerBlocksProps } from "@wordpress/block-editor"

wp.blocks.registerBlockType( "sivulabra/boxes", {
  title: "Sivulabra Boxes",
  category: 'sivulabra',
  supports: {
    align: ["full"],
  },
  edit: EditComponent,
  save: SaveComponent
} )

function EditComponent(props) {
  const blockProps = useBlockProps({
    className: 'boxes container',
    style: { display: 'flex' }
  })
  const innerBlocksProps = useInnerBlocksProps(
    blockProps,
    {
      allowedBlocks: ['sivulabra/box'],
      orientation: 'horizontal',
      template: [['sivulabra/box']]
    }
  )

  return (
    <section {...innerBlocksProps} />
  )
}

function SaveComponent() {
  return <InnerBlocks.Content />
}