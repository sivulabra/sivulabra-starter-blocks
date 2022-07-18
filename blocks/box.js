import { InnerBlocks } from "@wordpress/block-editor"

wp.blocks.registerBlockType( "sivulabra/box", {
  title: "Sivulabra Block",
  category: 'sivulabra',
  parent: ["sivulabra/boxes"],
  supports: {
    align: ["full"],
  },
  edit: EditComponent,
  save: SaveComponent
} )

function EditComponent(props) {
  return (
    <div>
      Box
    </div>
  )
}

function SaveComponent() {
  return <InnerBlocks.Content />
}