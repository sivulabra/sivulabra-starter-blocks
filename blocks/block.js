import { InnerBlocks } from "@wordpress/block-editor"

wp.blocks.registerBlockType( "sivulabra/block", {
  title: "Sivulabra Block",
  category: 'sivulabra',
  supports: {
    align: ["full"],
  },
  edit: EditComponent,
  save: SaveComponent
} )

function EditComponent(props) {
  return (
    <div>
      Block
    </div>
  )
}

function SaveComponent() {
  return <InnerBlocks.Content />
}